<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- tailwind / DaisyUI -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.20.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Mito Formation | <?= $title ?></title>
</head>

<body>


    <div class="navbar bg-base-100 2xl:px-60 ">
        <div class="flex-1">
            <a class=" btn btn-ghost normal-case text-xl" href="index.php"><span class="text-red-500">M</span>ito_<span class="text-red-500">F</span><span class="hidden sm:contents">ormation</span></a>
        </div>
        <div class="flex-none font-semibold">
            <ul class="menu menu-horizontal p-0">
                <li tabindex="0">
                    <a>
                        Menu
                        <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                            <path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" />
                        </svg>
                    </a>
                    <ul class="p-2 bg-base-100">
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="formateurs.php">Formateurs</a></li>
                        <li><a href="stagiaires.php">Stagiaires</a></li>
                        <li><a href="backOffice.php">BackOffice</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <hr>
    <main class="">