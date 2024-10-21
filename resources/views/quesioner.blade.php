@extends('layout.page.base')

@section('style')
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #3e7cb1;
            color: white;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header img {
            height: 50px;
        }

        .header h1 {
            font-size: 20px;
            font-weight: 600;
        }

        .container {
            max-width: 700px;
            margin: 50px auto;
            padding: 30px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #3e7cb1;
            font-weight: 600;
            font-size: 26px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-size: 16px;
            color: #333;
            margin-bottom: 8px;
        }

        input[type="number"],
        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 4px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }

        input[type="number"]:focus,
        input[type="text"]:focus,
        input[type="email"]:focus {
            border-color: #3e7cb1;
        }

        .radio-group {
            display: flex;
            align-items: center;
            margin-top: 8px;
        }

        .radio-group label {
            margin-right: 20px;
            font-size: 16px;
            color: #202124;
        }

        input[type="radio"] {
            margin-right: 8px;
            accent-color: #3e7cb1;
        }

        .submit-btn {
            background-color: #3e7cb1;
            color: white;
            font-size: 18px;
            font-weight: bold;
            padding: 12px;
            width: 100%;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #2d5c8a;
        }

        .progress-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .progress-bar .step {
            width: 25%;
            text-align: center;
            font-size: 14px;
            color: #333;
        }

        .progress-bar .step.active {
            color: #3e7cb1;
        }

        .progress-bar .line {
            flex-grow: 1;
            height: 3px;
            background-color: #ccc;
            margin: 0 10px;
        }

        .progress-bar .line.active {
            background-color: #3e7cb1;
        }
    </style>
@endsection


@section('content')
    <section id="hero" class="hero section">
        <div class="container">
            <h2>PENDATAAN PHBS <br> PUSKESMAS CICALENGKA DTP</h2>
            <!-- Question Form -->
            <form action="process_questions.php" method="post">
                {{--                {{ $datas }}--}}
                @foreach($datas as $data)
                    <div class="form-group">
                        <label>{{ $data->jawaban }}</label>
                        <div class="radio-group">
                            <input type="radio" id="ya1" name="jwb1" value=1 required>
                            <label for="ya1">Ya</label>
                            <input type="radio" id="tidak1" name="jwb1" value=0 required>
                            <label for="tidak1">Tidak</label>
                        </div>
                    </div>
                @endforeach
                <button type="submit" class="submit-btn">Kirim</button>
            </form>
        </div>

    </section>

@endsection

