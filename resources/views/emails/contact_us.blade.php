<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Message</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            color: #333333;
        }
        .email-container {
            width: 100%;
            max-width: 650px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            font-size: 16px;
        }
        .email-header {
            background-color: #0066cc;
            padding: 30px;
            text-align: center;
            color: #ffffff;
        }
        .email-header h2 {
            margin: 0;
            font-size: 26px;
            font-weight: bold;
        }
        .email-content {
            padding: 30px;
            line-height: 1.6;
        }
        .email-content p {
            margin: 0 0 15px;
        }
        .email-content strong {
            display: block;
            margin-bottom: 5px;
            color: #333333;
        }
        .email-content .message-text {
            background-color: #f4f4f4;
            padding: 15px;
            border-left: 4px solid #0066cc;
            margin-bottom: 20px;
            font-style: italic;
            color: #555555;
        }
        .email-footer {
            background-color: #f4f4f4;
            text-align: center;
            padding: 20px;
            font-size: 14px;
            color: #888888;
        }
        .email-footer p {
            margin: 0;
        }
        .email-footer a {
            color: #0066cc;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Email header -->
        <div class="email-header">
            <h2>New Contact Us Message</h2>
        </div>

        <!-- Email content -->
        <div class="email-content">
            <p><strong>Name:</strong> {{ $details['first_name'] }}  {{ $details['second_name'] }} </p>
            <p><strong>Email:</strong> {{ $details['email'] }}</p>
            <p><strong>Phone:</strong> {{ $details['phone'] }}</p>
            <p><strong>Message:</strong></p>
            <div class="message-text">{{ $details['message'] }}</div>
        </div>

        <!-- Email footer -->
        <div class="email-footer">
            <p>This is an automated message. If you have any questions, feel free to <a href="mailto:{{ $details['email'] }}">contact us</a>.</p>
        </div>
    </div>
</body>
</html>
