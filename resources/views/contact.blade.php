@extends('layouts.header')

@section('css')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
            padding-top: 50px;
            padding-bottom: 50px;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 50px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h2 {
            font-size: 48px;
            margin-bottom: 20px;
            text-align: center;
            font-weight: bold;
        }
        .contact-info {
            font-size: 18px;
            margin-bottom: 30px;
        }
        .contact-info div {
            margin-bottom: 10px;
        }
        .form-control {
            border-radius: 30px;
            background-color: #f8f9fa;
            border: none;
        }
        .btn-primary {
            background-color: #d89b5f;
            border: none;
            border-radius: 30px;
            padding: 10px 30px;
            transition: background-color 0.3s;
        }
        .btn-primary:hover {
            background-color: #b67a4a;
        }
        .form-group {
            margin-bottom: 20px;
        }
@endsection

@section('body')
<body>
    <div class="container">
        <h2>Contact Us</h2>
        <div class="row">
            <div class="col-md-6 contact-info">
                <div><strong>Phone :</strong><br> +20 010 2517 8918</div>
                <div><strong>Address :</strong><br> 3rd Avenue, Upper East Side, San Francisco</div>
                <div><strong>Email :</strong><br> email_support@youraddress.com</div>
            </div>
            <div class="col-md-6">
                <form action="your-server-side-script.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="message" name="message" rows="4" placeholder="Message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
@endsection
