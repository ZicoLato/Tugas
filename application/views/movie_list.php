<!DOCTYPE html>
<html>
<head>
    <title>Web Info Movie dengan OMDb API</title>
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

        .movie-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        }

        .movie-card {
        width: 200px;
        background-color: #fff;
        margin: 10px;
        padding: 10px;
        text-align: center;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .movie-card img {
        width: 100%;
        height: auto;
        margin-bottom: 10px;
        }

        .movie-card h2 {
        margin: 0;
        }

        .movie-card p {
        margin: 5px 0;
        font-size: 14px;
        color: #666;
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
    <div id="movie-list" class="movie-container">
        <?php foreach ($movies as $movie) { ?>
            <div class="movie-card">
                <img src="<?php echo $movie->Poster; ?>" alt="<?php echo $movie->Title; ?>">
                <h2><?php echo $movie->Title; ?> (<?php echo $movie->Year; ?>)</h2>
                <p>IMDb ID: <?php echo $movie->imdbID; ?></p>
            </div>
        <?php } ?>
    </div>
</body>
</html>
