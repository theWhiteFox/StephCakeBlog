<h1>Create a new Post</h1>
<article>
   <form action="" method="post">
      <ul>
         <li>
            <label for="title">Title: </label>
            <input type="text" name="title" id="title">
         </li>
         <li>
            <label for="body">Body: </label>
            <textarea name="body" id="body"></textarea>
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

