<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <style>
*{
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}

body{
  height: 100vh;
  width: 100%;
  background-color: #ececec;
  font-family: 'Roboto', sans-serif;}

.feed{
  margin: 0 auto;
  width: 750px;
  padding: 45px 0;
}

.post{
  width: 100%;
  background-color: #fff;
  margin: 0 auto;
  min-height: 100px;
  border: 1px solid #ececec;
  border-radius: 3px;
  padding: 12px 18px;
}

.post__top{
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.post__top-left{
  display: flex;
  align-items: center;
}

.post__profile-img{
  height: 40px;
  width: 40px;
  border-radius: 50%;
  object-fit: cover;
  margin-right: 10px;
}

.post__profile-name{
  color: #424242;
  text-decoration: none;
  font-size: 16px;
  font-weight: bold;
}
.post__profile-name:hover{
  text-decoration: underline;
}

.post__date-posted{
  font-size: 14px;
  color: #aaaaaa;
}


/* Content */
.post__content{
  padding: 14px 8px;
}
.p{
  font-size: 16px;
  color: #1d2129;
}

.post__footer{
  padding: 2px 10px;

}

.footer-link{
  color: red;
  margin: 0 30px 0 0;
  text-decoration: none;
  font-size: 14px;
  color: #aaa;
}

.footer-link:hover{
  color: #1da1f2;
}

.footer-icon{
  fill: currentColor;
  margin-right: 4px;
  display: inline-block;
  font-size: 24px;
}

.footer-link:nth-child(2):hover{
  color: #17bf63;
}
.footer-link:nth-child(3):hover{
  color: #F44336;
}

/* Comment Section */

.post__comments{
  border-top: 1px solid #efefef;
  padding: 16px 0;
  margin-top: 10px;
}

.comment-create{
  display: flex;
  align-items: center;
  border-radius: 3px;
}
.comment__profile-img{
    height: 34px;
  width: 34px;
  border-radius: 50%;
  object-fit: cover;
  margin-right: 8px;
}
.input{
  width: 100%;
  box-sizing: border-box;
  border-radius: 3px;
  padding: 6px 14px;
  border: none;
  background-color: #eee;
  height: 34px;
}

.comment{
  display: flex;
  margin: 20px 0;
  align-items: center;
  border-radius: 3px;
}
.comment__text{
  background-color: #eee;
  font-size: 14px;
  padding: 8px 6px;
}

.comment-name{
  text-decoration: none;
  font-size: 14px;
  font-weight: bold;
  color: #424242;
}
.comment-name:hover{
  text-decoration: underline
}
.comment__content{
}

    </style>
</head>
<body>

<div class="feed">
  <?php
    $judul = 'avengers';
    // $url = "http://www.omdbapi.com/?apikey=64f76c30&s='$judul'";
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "http://www.omdbapi.com/?apikey=64f76c30&s='$judul'");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    curl_close($curl);

    $result = json_decode($result, true);
    $movies = $result['Search'];
    var_dump($movies);

  ?>



  <div class="post">
    <div class="post__top">
        <div class="post__top-left">
          <img class="post__profile-img" src="https://www.vut.ac.za/wp-content/uploads/2016/02/blank-profile-picture-973460_1280-283x189.png" alt="">
          <a class="post__profile-name" href="#">Camden Foucht</a>
        </div>
        <div>
          <span class="post__date-posted">3m</span>
          </span>
        </div>
      </div>
      <div class="post__content">
        <p class="p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi perspiciatis praesentium omnis, nisi quae tempora. Provident natus sint, est labore ratione quam repellat laborum itaque voluptatem magnam perspiciatis aperiam unde.</p>
      </div>
      <div class="post__comments">
        <div class="comment-create">
                <img class="comment__profile-img" src="https://www.vut.ac.za/wp-content/uploads/2016/02/blank-profile-picture-973460_1280-283x189.png" alt="">
          <input class="input" placeholder="Add a comment" />
        </div>
    </div>
  </div>

</div>
</body>
</html>