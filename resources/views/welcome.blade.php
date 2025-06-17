<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Cards</title>
    <style>
        .container {
            display: flex;
            gap: 20px;
            padding: 20px;
        }
        .card {
            width: 200px;
            background: white;
            border: 1px solid #ddd;
            padding: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }
        .card h3 {
            margin: 10px 0;
            color: #333;
        }
        .card p {
            color: #666;
            font-size: 14px;
            margin: 0;
        }
        .card.active {
            background-color: #e3f2fd;
            border-color: #2196f3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card" data-description="A beautiful mountain landscape with snow-capped peaks">
            <img src="https://picsum.photos/200/150?1">
            <h3>Mountain View</h3>
            <p>A beautiful mountain landscape with snow-capped peaks</p>
        </div>
        <div class="card" data-description="A serene beach scene with crystal clear waters">
            <img src="https://picsum.photos/200/150?2">
            <h3>Beach Paradise</h3>
            <p>A serene beach scene with crystal clear waters</p>
        </div>
        <div class="card" data-description="A vibrant city skyline at sunset">
            <img src="https://picsum.photos/200/150?3">
            <h3>City Lights</h3>
            <p>A vibrant city skyline at sunset</p>
        </div>
        <div class="card" data-description="A peaceful forest path in autumn">
            <img src="https://picsum.photos/200/150?4">
            <h3>Forest Trail</h3>
            <p>A peaceful forest path in autumn</p>
        </div>
    </div>

    <script>
        const cards = document.querySelectorAll('.card');
        cards.forEach(card => {
            card.addEventListener('click', function() {
                const title = this.querySelector('h3').textContent;
                const description = this.querySelector('p').textContent;
                alert(`Title: ${title}\nDescription: ${description}`);

                cards.forEach(c => c.classList.remove('active'));
                this.classList.add('active');
            });
        });
    </script>
</body>
</html>