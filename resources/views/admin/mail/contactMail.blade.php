<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Email</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            border-bottom: 2px solid #4CAF50;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .header h1 {
            color: #4CAF50;
            margin: 0;
        }
        .content {
            line-height: 1.6;
        }
        .content h2 {
            color: #333;
        }
        .message {
            margin-top: 10px;
            padding: 15px;
            background-color: #f9f9f9;
            border-left: 4px solid #4CAF50;
            color: #333;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            color: #777;
            font-size: 12px;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #4CAF50;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <h1>{{ $data['subject'] }}</h1>
        </div>
        <div class="content">
            <p>Hello {{ $data['name'] }},</p>
            <p>You have received a new message from {{ $data['email'] }}</p>
            <div class="message">
                <p><strong>Email:</strong> {{ $data['email'] }}</p>
                <p><strong>Message:</strong> {{ $data['msg'] }}</p>
            </div>
        </div>
        <div class="footer">
            <p>Thank you for contacting us.</p>
            <p>{{ $data['email'] }}</p>
        </div>
    </div>
</body>
</html>
