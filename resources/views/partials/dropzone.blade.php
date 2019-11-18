

    <form action="/admin/image" class="dropzone" id="mydropzone" method="post">
        @csrf
        <div class="form-group col-md-4 ">
            <label for=""> قبل از بارگذاری عکس و ذخیره ابتدا محصول را انتخاب کنید</label>
            <select class="form-control">

                @foreach($product as $products)
                    <option id="{{$products->id}}">
                        {{ $products->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="fallback">
            <input name="file" type="file" multiple/>
            <input type="submit" value="ذخیره" class="btn btn-primary"
                   id="btnAddImage"
            >
        </div>
    </form>



