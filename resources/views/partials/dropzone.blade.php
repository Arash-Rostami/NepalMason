<form action="/admin/image"
      class="dropzone"
      id="mydropzone"
      method="post"
      enctype="multipart/form-data">
    @csrf
    <input type="hidden" id="prod" name="productid" value="{{$product->id}}">


    <div class="fallback">
        <input name="file" type="file" multiple/>

    </div>
</form>


<form action="/admin/image" method="post">
    @csrf

    <input type="submit" value="{{$product->name}}" class="btn btn-primary">
</form>




