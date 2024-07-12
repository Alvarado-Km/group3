 @props(['title', 'description','price', 'src'])


    <a href="#" class=" ml-10 mt-20 flex flex-col items-center bg-white  rounded-lg  md:flex-row md:max-w-xl  ">
     <img src="{{$src}}"  class="h-auto max-w-xs rounded" >
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-title tracking-tight text-gray-900 dark:text-">{{$title}}</h5>
    <p class="mb-3 font-common ">{{$description}}</p>
<h3 class="font-common text-base mt-10">{{$price}}</h3>
</div>
</a>




