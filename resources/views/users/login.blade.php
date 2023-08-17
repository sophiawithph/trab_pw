<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | GN</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(14, 63, 92), rgb(0, 0, 0));
        }

        .box {
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            /* background-color: rgba(0, 0, 0, 0.6); */
            padding: 50px;
            border-radius: 15px;
            width: 20%;
        }

        fieldset {
            border: 2px solid rgb(56, 202, 251);
            border-radius: 15px;
        }

        legend {
            border: 1px solid rgb(56, 202, 251);
            padding: 10px;
            text-align: center;
            background-color: rgb(56, 202, 251);
            border-radius: 15px;
            margin-bottom: 20px;
        }

        .inputBox {
            position: relative;
        }

        .inputUser {
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }

        .labelInput {
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }

        .inputUser:focus~.labelInput,
        .inputUser:valid~.labelInput {
            top: -20px;
            font-size: 12px;
            color: rgb(56, 202, 251);
        }

        #submit {
            background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }

        #submit:hover {
            background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));
        }

        .error {
            text-align: center;
            background-color: red;
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 20px
        }

        a {
            text-decoration: none;
            color: white
        }
    </style>
</head>

<body>



    <div class="box"">
        @if (session('erro'))
            <div class="error">{{ session('erro') }}</div>
        @endif
        <div class="form">
            <legend><b>Login</b></legend>
            <form action="{{ url()->current() }}" method="POST">
                <fieldset>
                    @csrf
                    <br><br>
                    <div class="inputBox">
                        <input type="email" name="email" class="inputUser">
                        <label for="email" class="labelInput">Email:</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="password" name="password" class="inputUser">
                        <label for="Password" class="labelInput">Password:</label>
                    </div>
                    <br><br>
                    <button type="submit" id="submit">Logar</button>
                </fieldset>
            </form>
            <button type="submit" id="submit"><a href="{{ route('movies.listAll') }}">Voltar</a></button>
        </div>
    </div>
    </div>
    </div>
</body>
