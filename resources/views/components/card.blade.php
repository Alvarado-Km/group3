 @props(['src', 'id', 'name'])
 <a href="/products/product/{{$id}}" class=" ml-10 flex flex-col items-center bg-white  rounded-lg  md:flex-row md:max-w-xl  ">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <img src="{{$src}}" class="object-cover size-64 rounded" >
        <p class="ml-4 mr-4">{{ $name }}</p>
    </div>
 </a>




