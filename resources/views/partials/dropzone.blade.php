
<form action="/admin/image"
      class="dropzone"
      id="mydropzone"
      method="post"
      enctype="multipart/form-data">
    @csrf


    <div class="fallback">
        <input name="file" type="file" multiple/>

    </div>
</form>






