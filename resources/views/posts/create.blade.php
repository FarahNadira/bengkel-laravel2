
<form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data" autocomplete="off"> 
@csrf
Title:
<input type="text" name="tittle"><br><br>
Content
<textarea name="content" id="" cols="30" rows="10"> </textarea><br><br>
Image:
<input type="file" name="image"><br><br>
<button type="submit">Save</button><br>
</form>