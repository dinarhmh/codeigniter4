<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var list<string>
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules 
    // --------------------------------------------------------------------
    public $create_master_category = [
        'kode_kategori' => [
            'rules' => 'required|max_length[5]|is_natural|is_unique[t_category.kode_kategori]', 
        ],
        'nama_kategori' => [
            'rules' => 'required',
        ]
    ];
    public $update_master_category = [
        'kode_kategori' => [
            'rules' => 'required|max_length[5]|is_natural|is_unique[t_category.kode_kategori,id,{id}]', 
        ],
        'nama_kategori' => [
            'rules' => 'required',
        ]
    ];


}
