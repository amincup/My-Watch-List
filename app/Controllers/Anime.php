<?php

namespace App\Controllers;

use App\Models\WatchModel;

class Anime extends BaseController
{
    protected $animeModel;
    public function __construct()
    {
        $this->animeModel = new WatchModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Okaerinasai >///<'
        ];

        return view('pages/home', $data);

        // $data = [
        //     'title' => 'Anime',
        //     'anime' => $this->animeModel->getAnime()
        // ];

        // return view('anime/index', $data);
    }

    public function list_anime()
    {
        $data = [
            'title' => 'Anime',
            'anime' => $this->animeModel->getAnime()
        ];

        return view('anime/index', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About'
        ];

        return view('pages/about', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Ishoni mite yo >///<',
            'anime' => $this->animeModel->getAnime($slug)
        ];

        if (empty($data['anime'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Title ' . $slug . ' not found');
        }
        return view('anime/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Add watch list',
            'validation' => \Config\Services::validation()
        ];

        return view('anime/create', $data);
    }

    public function save()
    {
        //validasi input
        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[watch.judul]',
                'errors' => [
                    'required' => '{field} Judul harus di isi',
                    'is_unique' => '{field} Judul sudah terdaftar'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/anime/create')->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->animeModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'genre' => $this->request->getVar('genre'),
            'studio' => $this->request->getVar('studio'),
            'sampul' => $this->request->getVar('sampul')
        ]);

        session()->setFlashdata('pesan', 'Data successfully added');

        return redirect()->to('/anime/list_anime');
    }

    public function delete($id)
    {
        $this->animeModel->delete($id);
        session()->setFlashdata('pesan', 'Data successfully deleted');
        return redirect()->to('/anime/list_anime');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Edit watch list',
            'validation' => \Config\Services::validation(),
            'anime' => $this->animeModel->getAnime($slug)
        ];

        return view('anime/edit', $data);
    }

    public function update($id)
    {
        //cek judul
        $animeLama = $this->animeModel->getAnime($this->request->getVar('slug'));
        if ($animeLama['judul'] == $this->request->getVar('judul')) {
            $rule_judul = 'required';
        } else {
            $rule_judul = 'required|is_unique[watch.judul]';
        }

        //validasi input
        if (!$this->validate([
            'judul' => [
                'rules' => $rule_judul,
                'errors' => [
                    'required' => '{field} Judul harus di isi',
                    'is_unique' => '{field} Judul sudah terdaftar'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/anime/edit/' . $this->request->getVar('slug'))->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->animeModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'genre' => $this->request->getVar('genre'),
            'studio' => $this->request->getVar('studio'),
            'sampul' => $this->request->getVar('sampul')
        ]);

        session()->setFlashdata('pesan', 'Data successfully edited');

        return redirect()->to('/anime/list_anime');
    }
}
