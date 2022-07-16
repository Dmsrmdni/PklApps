<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function artikel()
    {
        $artikel = [
            [
                'beranda' => 'beranda',
                'berita' => 'berita',
                'kategori_berita' => [
                    [
                        'name' => 'olahraga',
                        'data' => ['sepak bola', 'bulu tangkis'],
                    ],
                    [
                        'name' => 'politik',
                        'data' => [],
                    ],
                    [
                        'name' => 'manca negara',
                        'data' => [],
                    ],
                ],
                'tentang' => 'tentang',
            ],
        ];

        // dd($artikel);

        return view('pages.artikel', ['artikel' => $artikel]);
    }

    public function nilai()
    {
        $nilai = [
            [
                'nama_dosen' => 'yusuf bachtiar',
                'matkul' => 'pemrograman mobile',
                'siswa_bimbingan' => [
                    [
                        'nama' => 'muhammada soleh',
                        'nilai' => 78,
                    ],
                    [
                        'nama' => 'jujun junaedi',
                        'nilai' => 85,
                    ],
                    [
                        'nama' => 'mamat alkatiri',
                        'nilai' => 90,
                    ],
                    [
                        'nama' => 'ubay holin',
                        'nilai' => 87,
                    ],
                    [
                        'nama' => 'fadilah',
                        'nilai' => 95,
                    ],
                ],
            ],
            [
                'nama_dosen' => 'yaris riyadi yusuf ',
                'matkul' => 'pemrograman web',
                'siswa_bimbingan' => [
                    [
                        'nama' => 'alfred mctomynay',
                        'nilai' => 78,
                    ],
                    [
                        'nama' => 'bruno kasmir',
                        'nilai' => 85,
                    ],
                    [
                        'nama' => 'akid hendra',
                        'nilai' => 90,
                    ],
                    [
                        'nama' => 'dany irawan',
                        'nilai' => 90,
                    ],
                    [
                        'nama' => 'chandra mega putra',
                        'nilai' => 90,
                    ],
                ],
            ],
        ];
        // dd($nilai);

        return view('pages.nilai', ['nilai' => $nilai]);
    }

    public function penyiaran()
    {
        $penyiaran = [
            [
                'nama_saluran' => 'NET TV',
                'jadwal' => [
                    [
                        'siaran' => 'One championship warrior',
                        'tanggal' => '22 oktober 2004',
                        'jam' => '01.00',
                    ],
                    [
                        'siaran' => '86',
                        'tanggal' => '11 november 2020',
                        'jam' => '06.00',
                    ],
                    [
                        'siaran' => 'Fakta +62',
                        'tanggal' => '11 september 2024',
                        'jam' => '07.00',
                    ],
                    [
                        'siaran' => 'Zona musik',
                        'tanggal' => '19 oktober 2014',
                        'jam' => '08.35',
                    ],
                ],
            ],
            [
                'nama_saluran' => 'TVRI',
                'jadwal' => [
                    [
                        'siaran' => 'Flashback',
                        'tanggal' => '22 oktober 2021',
                        'jam' => '22.00',
                    ],
                    [
                        'siaran' => 'Jejak islam',
                        'tanggal' => '11 oktober 2005',
                        'jam' => '04.00',
                    ],
                    [
                        'siaran' => 'Klik indonesia pagi',
                        'tanggal' => '11 oktober 2021',
                        'jam' => '06.00',
                    ],
                    [
                        'siaran' => 'Tvri sport',
                        'tanggal' => '09 oktober 2022',
                        'jam' => '07.00',
                    ],
                ],
            ],
            [
                'nama_saluran' => 'BEINSPORT',
                'jadwal' => [
                    [
                        'siaran' => 'Austin vs Houston Dynamo',
                        'tanggal' => '22 oktober 2021',
                        'jam' => '00.00',
                    ],
                    [
                        'siaran' => 'Vietnam vs Malaysia',
                        'tanggal' => '11 oktober 2005',
                        'jam' => '15.30',
                    ],
                    [
                        'siaran' => 'Laos vs Thailand',
                        'tanggal' => '11 oktober 2021',
                        'jam' => '20.00',
                    ],
                    [
                        'siaran' => 'Arema vs Borneo',
                        'tanggal' => '09 oktober 2022',
                        'jam' => '22.00',
                    ],
                ],
            ],
            [
                'nama_saluran' => 'OCHANNEL',
                'jadwal' => [
                    [
                        'siaran' => 'The Immortals',
                        'tanggal' => '22 oktober 2021',
                        'jam' => '03.30',
                    ],
                    [
                        'siaran' => 'Sport Updatel',
                        'tanggal' => '11 oktober 2005',
                        'jam' => '10.00',
                    ],
                    [
                        'siaran' => 'Todays Update',
                        'tanggal' => '11 oktober 2021',
                        'jam' => '07.00',
                    ],
                    [
                        'siaran' => 'Volleyball Nations League',
                        'tanggal' => '09 oktober 2022',
                        'jam' => '18.00',
                    ],
                ],
            ],
            [
                'nama_saluran' => 'INDOSIAR',
                'jadwal' => [
                    [
                        'siaran' => 'True Legend',
                        'tanggal' => '22 oktober 2021',
                        'jam' => '12.00',
                    ],
                    [
                        'siaran' => 'Patroli Malam',
                        'tanggal' => '11 oktober 2005',
                        'jam' => '02.30',
                    ],
                    [
                        'siaran' => 'Fokus Malaml',
                        'tanggal' => '11 oktober 2004',
                        'jam' => '11.00',
                    ],
                    [
                        'siaran' => 'Fokus Pagi',
                        'tanggal' => '09 oktober 2022',
                        'jam' => '04.30',
                    ],
                ],
            ],
        ];

        return view('pages.penyiaran', ['penyiaran' => $penyiaran]);
    }
}
