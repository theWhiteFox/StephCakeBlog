<h1>Create a new Post</h1>
<article>
   <form action="" method="post">
      <ul>
         <li>
            <label for="title">Title: </label>
            <input type="text" name="title" id="title" placeholder="Input Title">
         </li>
         <li>
            <label for="body">Body: </label>
            <textarea name="body" id="body" placeholder="Input Text for Body"></textarea>
         </li>
         <li>
            <input type="submit" value="Create Post" name="SubmitPost">         
         </li>
      </ul> 
      <br>
      <?php if (isset($status)) : ?>
         <p><?= $status; ?></p>
      <?php endif; ?>
   </form>
</article>
<p><button onclick="location.href = '../'">Posts</button></p>
 <div align="center"><img src="../img/10.jpg" class="bg"></div>

