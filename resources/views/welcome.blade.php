<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="flex justify-center items-center min-h-screen p-10 bg-gray-100">
    <div class="w-[400px] space-y-10">

        <div class="flex flex-col gap-2 bg-gray-300 rounded-md p-6">
            <h1 class="font-bold">FORMULARIO DE REGISTRO</h1>
            <form action="" class="flex-col flex gap-3">
                <div class="flex flex-col gap-1">
                    <label class="text-sm" for="">Inserte su nombre</label>
                    <input placeholder="Inserte su nombre" type="text" class="bg-gray-200 py-2 px-4 rounded-md text-sm">
                </div>
                <div class="flex flex-col gap-1">
                    <label class="text-sm" for="">Inserte su apellido</label>
                    <input placeholder="Inserte su apellido" type="text" class="bg-gray-200 py-2 px-4 rounded-md text-sm">
                </div>
                <div class="flex flex-col gap-1">
                    <label class="text-sm" for="">Inserte su carnet</label>
                    <input placeholder="Inserte su carnet" type="number" class="bg-gray-200 py-2 px-4 rounded-md text-sm">
                </div>
                <div class="flex flex-col gap-1">
                    <label class="text-sm" for="">Numero de celular</label>
                    <input placeholder="Inserte su celular" type="number" class="bg-gray-200 py-2 px-4 rounded-md text-sm">
                </div>
                <div class="flex flex-col gap-1">
                    <label class="text-sm" for="">Correo</label>
                    <input placeholder="Inserte su correo" type="email" class="bg-gray-200 py-2 px-4 rounded-md text-sm">
                </div>
                <div class="flex flex-col gap-1">
                    <label class="text-sm" for="">Fecha de nacimiento</label>
                    <input type="date" class="bg-gray-200 py-2 px-4 rounded-md text-sm">
                </div>
                <button class="bg-blue-500 px-4 py-2 rounded-md">Enviar</button>
            </form>

        </div>
        <div>
            <h1>Galeria de Imagenes</h1>
            <img src="https://m.media-amazon.com/images/S/pv-target-images/56084ba0af7752d2b0d89c24ea9905af4cbb6ef8fa0fe24a194bb5b9d27a8725._UR800,450_.png" alt="">
            <img src="https://contraste.info/wp-content/uploads/2024/07/ElosoYogui_FichaCine_2797511.jpg" alt="">
        </div>
    </div>
</body>

</html>