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
            'title' => 'My Watch List | Home'
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
            'title' => 'My Watch List | Watch List',
            'anime' => $this->animeModel->getAnime()
        ];

        return view('anime/index', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'My Watch List | About'
        ];

        return view('pages/about', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail',
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
                ],

            ],
            'sampul' => [
                'rules' => 'max_size[sampul,10240]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'File size max is 10 MB',
                    'is_image' => 'File you choose is not image',
                    'mime_in' => 'File you choose is not image'
                ]
            ]
        ])) {

            session()->setFlashdata('pesan', 'Judul is empty or already exist');
            return redirect()->to('/anime/create')->withInput();
        }

        //ambil gambar
        $fileSampul = $this->request->getFile('sampul');

        //apakah tidak ada ambar yang di upload
        if ($fileSampul->getError() == 4) {
            $namaSampul = 'default.jpg';
        } else {
            //generate nama sampul random
            // $namaSampul = $fileSampul->getRandomName();

            //pindahkan file
            $fileSampul->move('img');

            //ambil nama file
            $namaSampul = $fileSampul->getName();
        }



        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->animeModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'genre' => $this->request->getVar('genre'),
            'studio' => $this->request->getVar('studio'),
            'sampul' => $namaSampul
        ]);

        session()->setFlashdata('pesan', 'Data successfully added');
        return redirect()->to('/anime/list_anime/#table');
    }

    public function delete($id)
    {
        //cari gambar dari id
        $anime = $this->animeModel->find($id);

        //cek jika default
        if ($anime['sampul'] != 'default.jpg') {
            //hapus gambar
            unlink('img/' . $anime['sampul']);
        }


        $this->animeModel->delete($id);
        session()->setFlashdata('pesan', 'Data successfully deleted');
        return redirect()->to('/anime/list_anime/#table');
    }

    public function edit($slug)
    {
        $anime = $this->animeModel->getAnime($slug);

        $data = [
            'title' => 'Edit watch list',
            'validation' => \Config\Services::validation(),
            'anime' => $anime
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
            ],
            'sampul' => [
                'rules' => 'max_size[sampul,10240]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'File size max is 10 MB',
                    'is_image' => 'File you choose is not image',
                    'mime_in' => 'File you choose is not image'
                ]
            ]
        ])) {
            session()->setFlashdata('pesan', 'Judul is empty or already exist');
            return redirect()->to('/anime/edit/' . $this->request->getVar('slug'))->withInput();
        }

        $fileSampul = $this->request->getFile('sampul');

        //cek gambar
        if ($fileSampul->getError() == 4) {
            $namaSampul = $this->request->getVar('sampulLama');
        } else {
            $namaSampul = $fileSampul->getRandomName();
            $fileSampul->move('img', $namaSampul);
            unlink('img/' . $this->request->getVar("sampulLama"));
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->animeModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'genre' => $this->request->getVar('genre'),
            'studio' => $this->request->getVar('studio'),
            'sampul' => $namaSampul
        ]);

        session()->setFlashdata('pesan', 'Data successfully edited');

        return redirect()->to('/anime/list_anime/#table');
    }
}
