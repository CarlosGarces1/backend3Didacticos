<?php

namespace App\Livewire;

use App\Models\Post;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class PostsComponent extends Component
{
    public $posts, $description, $name, $id_posts;
    public $modal = false;

    public function render()
    {
        $this->posts = Post::with('user')->get();
        return view('livewire.posts-component');
    }


    public function crear()
    {
        $this->limpiarCampos();
        $this->abrirModal();
    }
    public function abrirModal()
    {
        $this->modal = true;
    }
    public function cerrarModal()
    {
        $this->modal = false;
    }
    public function limpiarCampos()
    {
        $this->description = '';
        $this->name = '';
        $this->id_posts = '';
    }
    public function editar($id)
    {
        $id_posts = Post::findOrFail($id);
        $this->id_posts = $id;
        $this->name = $id_posts->name;
        $this->description = $id_posts->description;
        $this->modal = true;
    }
    public function borrar($id)
    {
        Post::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
    }
    public function guardar()
    {
        $userId = Auth::id();
        $data = [
            'name' => $this->name,
            'description' => $this->description,
            'users_id' => $userId,
        ];

        if ($this->id_posts) {
            Post::where('id', $this->id_posts)->update($data);
            session()->flash('message', 'Registro actualizado correctamente');
        } else {
            Post::create($data);
            session()->flash('message', 'Producto creado correctamente');
        }

        $this->limpiarCampos();
        $this->cerrarModal();
    }
}
