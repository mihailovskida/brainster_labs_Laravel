<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .email-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        p {
            color: #555;
        }

        .contact-info {
            margin-top: 20px;
            border-top: 1px solid #ccc;
            padding-top: 20px;
        }

        .contact-info p {
            margin: 5px 0;
        }
    </style>
</head>
<body>

<div class="email-container">
    <h1>Информации за вработување студенти</h1>
    <p>Почитувани,</p>

    <div class="contact-info">
        <p><span>Компанија:</span> {{ $company }}</p>
        <p><span>Телефон:</span> {{ $phone }}</p>
        <p><span>Е-маил:</span> {{ $email }}</p>
    </div>

    <p>Благодариме на вашето време и се надеваме на успешна соработка.</p>
</div>

</body>
</html>
