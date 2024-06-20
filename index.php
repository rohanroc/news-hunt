<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RSS Feed Reader</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="rss_src">
        <h1>RSS Feed Reader</h1>
        <form method="POST" action="display.php">
            <!-- <label for="rss_url">Enter RSS Feed URL:</label> -->
            <input type="url" id="rss_url" name="rss_url" placeholder="Enter RSS Feed URL:" class="search_box" required>
            <button type="submit" class="search_btn">Get Feed</button>
        </form>
    </div>

    <div class="demo_links">
        <h3>Recent News</h3>
        <a href="#" class="l" data-link="https://timesofindia.indiatimes.com/rssfeedmostrecent.cms">Times Of India</a>
        <a href="#" class="l" data-link="https://rss.nytimes.com/services/xml/rss/nyt/HomePage.xml">The New York
            Times</a>
        <a href="#" class="l" data-link="https://blog.hubspot.com/marketing/rss.xml">HubSpot CMS Blog</a>
    </div>

    <div class="box">
        <a href="home_news/entertainment.php" class="news_box">
            <div class="box_text">Entertainment</div>
            <img src="https://images.unsplash.com/photo-1542029123374-26f7a8e05fdd?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="tech" class="box_img">
        </a>

        <a href="home_news/tech.php" class="news_box">
            <div class="box_text">Technology</div>
            <img src="https://images.unsplash.com/photo-1525547719571-a2d4ac8945e2?q=80&w=1964&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="tech" class="box_img">
        </a>
        <a href="home_news/cricket.php" class="news_box">
            <div class="box_text">Cricket</div>
            <img src="https://images.unsplash.com/photo-1629285483773-6b5cde2171d7?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="tech" class="box_img">
        </a>
        <a href="home_news/education.php" class="news_box">
            <div class="box_text">Education</div>
            <img src="https://images.unsplash.com/photo-1529310399831-ed472b81d589?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="tech" class="box_img">
        </a>

    </div>

    <div class="box">
        <a href="home_news/top_news.php" class="news_box">
            <div class="box_text">Top News</div>
            <img src="https://images.unsplash.com/photo-1504465039710-0f49c0a47eb7?q=80&w=1935&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="tech" class="box_img">
        </a>
        <a href="home_news/lifestyle.php" class="news_box">
            <div class="box_text">Life & Style</div>
            <img src="https://images.unsplash.com/photo-1502301197179-65228ab57f78?q=80&w=1885&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="tech" class="box_img">
        </a>
        <a href="home_news/science.php" class="news_box">
            <div class="box_text">Science</div>
            <img src="https://images.unsplash.com/photo-1630959305606-3123a081dada?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="tech" class="box_img">
        </a>
        <a href="home_news/world.php" class="news_box">
            <div class="box_text">World News</div>
            <img src="https://images.unsplash.com/photo-1595666726330-5975a5bdd03d?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="tech" class="box_img">
        </a>
    </div>
    <script src="index.js"></script>
</body>

</html>