<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Tags with Laravel</title>
</head>
<body class="bg-gray-200 py-10">

<div class="max-w-3xl bg-white mx-auto p-5 rounded-3xl shadow-2xl">
    <form action="/tags" method="post" class="flex mb-7">
        @csrf
        <input type="text" name="name" autocomplete="off" class="rounded-l bg-gray-200 p-4 w-full outline-none" placeholder="nueva etiqueta">
        <input type="submit" value="Agregar" class="rounded-r px-8 bg-blue-500 text-white outline-none hover:cursor-pointer">
    </form>

    <div class="flex flex-col justify-center">
        <h4 class="text-xl text-center mb-4">Listado de etiquetas</h4>

        <table>
            @forelse($tags as $tag)
                <tr>
                    <td class="border px-4 py-2">{{$tag->name}}</td>
                    <td class="border px-4 py-2">{{$tag->slug}}</td>
                    <td class="px-4 py-2">
                        <form action="/tags/{{$tag->id}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Eliminar" class="px-3 rounded bg-red-500 text-white hover:cursor-pointer">
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>
                        <p>No hay etiquetas</p>
                    </td>
                </tr>
            @endforelse
        </table>
    </div>

</div>

<footer class="mt-10 text-center text-slate-600">
    <small>
        {{now()->year." For educational purposes only. "}}
        <a href="https://github.com/abrahamuchos" class="underline">Abrahamuchos</a>
    </small>
</footer>
</body>
</html>
