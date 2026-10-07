<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?= NOMBRE_EMPRESA ?></title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background: #f4f6f8; }
        header { background: #1f3a5f; color: #fff; padding: 15px 30px; }
        header h1 { margin: 0 0 10px; font-size: 24px; }
        nav a { color: #fff; margin-right: 20px; text-decoration: none; font-weight: bold; }
        nav a:hover { text-decoration: underline; }
        main { max-width: 700px; margin: 25px auto; background: #fff; padding: 20px; border-radius: 8px; }
        footer { text-align: center; padding: 15px; color: #555; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: center; }
        th { background: #1f3a5f; color: #fff; }
    </style>
</head>
<body>
<header>
    <h1><?= NOMBRE_EMPRESA ?></h1>
    <nav>
        <a href="index.php">Inicio</a>
        <a href="productos.php">Productos</a>
    </nav>
</header>
