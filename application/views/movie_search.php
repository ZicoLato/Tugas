<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        .search-container {
            text-align: center;
            margin-bottom: 20px;
        }

        #search-input {
            width: 300px;
            padding: 8px;
            font-size: 16px;
        }

        #search-button {
            padding: 8px 16px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <?php $this->load->view('navhome/navbar'); ?>
    <h1 align="center" id="judul">Database Movie dari OMDb API</h1>
    <div class="search-container">
        <form action="<?php echo site_url('api/search'); ?>" method="post">
            <input type="text" name="searchValue" id="search-input" placeholder="Masukkan kata kunci film..." required>
            <button type="submit" id="search-button">Search</button>
        </form>
    </div>
</body>

</html>