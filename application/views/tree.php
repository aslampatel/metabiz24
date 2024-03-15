<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Binary Tree MLM</title>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .node {
            border: 2px solid #17a2b8;
            border-radius: 10px;
            padding: 10px;
            text-align: center;
            background-color: #ffffff;
            position: relative;
        }

        .line {
            border: 1px solid #17a2b8;
            position: absolute;
            width: 50%;
            top: 50%;
            left: 0;
        }

        .line.right {
            left: 50%;
            transform: translateX(-1px);
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">Binary Tree MLM</div>
                    <div class="card-body text-center">
                        <div class="node">
                            Node 1
                            <div class="line"></div>
                            <div class="node">
                                Node 2
                                <div class="line"></div>
                                <div class="node">Node 4</div>
                                <div class="node">Node 5</div>
                            </div>
                            <div class="node">
                                Node 3
                                <div class="line right"></div>
                                <div class="node">Node 6</div>
                                <div class="node">Node 7</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
