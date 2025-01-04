<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>移动端HTML/PHP编辑器</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .editor-container {
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

        .editor {
            flex: 1;
            padding: 10px;
            border: 1px solid #ccc;
            resize: none;
            font-family: monospace;
            font-size: 16px;
            margin-bottom: 10px;
            height: 100%;
  width: 100%;

        }

        
    </style>
</head>

<body>

    <div class="editor-container">
    <form action="save_content.php" method="post">
    <textarea id="htmlEditor" class="editor" name="content" placeholder="在这里输入代码..."></textarea>
    <input type="submit" value="保存">
</form>

        
    </div>

</body>

</html>