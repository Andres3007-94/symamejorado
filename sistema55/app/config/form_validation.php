<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
    'auth/login' => array(
        array(
            'field' => 'identity',
            'label' => 'Usuario',
            'rules' => 'required'
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'required'
        )
    ),
    'auth/create_user' => array(
        array(
            'field' => 'first_name',
            'label' => 'Primer Nombre',
            'rules' => 'required'
        ),
        array(
            'field' => 'last_name',
            'label' => 'Apellidos',
            'rules' => 'required'
        ),
        array(
            'field' => 'username',
            'label' => 'Usuario',
            'rules' => 'required|alpha_dash'
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|valid_email'
        ),
        array(
            'field' => 'phone',
            'label' => 'Teléfono',
            'rules' => 'required'
        ),
        array(
            'field' => 'company',
            'label' => 'Empresa',
            'rules' => 'required'
        ),
        array(
            'field' => 'gender',
            'label' => 'Género',
            'rules' => 'required'
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'required|min_length[7]|max_length[20]'
        ),
        array(
            'field' => 'confirm_password',
            'label' => 'Confirmar Password',
            'rules' => 'required|min_length[7]|max_length[20]|matches[password]'
        ),
    ),
    'auth/edit_user' => array(
        array(
            'field' => 'first_name',
            'label' => 'Primer Nombre',
            'rules' => 'required'
        ),
        array(
            'field' => 'last_name',
            'label' => 'Apellidos',
            'rules' => 'required'
        ),
        array(
            'field' => 'username',
            'label' => 'Usuario',
            'rules' => 'required|alpha_dash'
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|valid_email'
        ),
        array(
            'field' => 'phone',
            'label' => 'Teléfono',
            'rules' => 'required'
        ),
        array(
            'field' => 'company',
            'label' => 'Empresa',
            'rules' => 'required'
        ),
        array(
            'field' => 'gender',
            'label' => 'Género',
            'rules' => 'required'
        ),
    ),
    'products/add' => array(
        array(
            'field' => 'code',
            'label' => 'Código de Producto',
            'rules' => 'trim|min_length[2]|max_length[20]|required|alpha_dash'
        ),
        array(
            'field' => 'name',
            'label' => 'Nombre del Producto',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'category',
            'label' => 'Categoría',
            'rules' => 'required'
        ),
        array(
            'field' => 'barcode_symbology',
            'label' => 'Código de Barras',
            'rules' => 'required'
        ),
        array(
            'field' => 'unit',
            'label' => 'Unidad de Producto',
            'rules' => 'required'
        ),
        array(
            'field' => 'price',
            'label' => 'Precio de Producto',
            'rules' => 'required|numeric'
        )
    ),
    'companies/add' => array(
        array(
            'field' => 'name',
            'label' => 'Persona de Contacto',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'company',
            'label' => 'Empresa',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|valid_email'
        ),
        array(
            'field' => 'address',
            'label' => 'Dirección',
            'rules' => 'required'
        ),
        array(
            'field' => 'city',
            'label' => 'Ciudad',
            'rules' => 'required'
        ),
        array(
            'field' => 'phone',
            'label' => 'Teléfono',
            'rules' => 'required'
        )
    ),
    'companies/add_user' => array(
        array(
            'field' => 'first_name',
            'label' => 'Primer Nombre',
            'rules' => 'required'
        ),
        array(
            'field' => 'last_name',
            'label' => 'Apellidos',
            'rules' => 'required'
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|valid_email'
        )
    ),
);

