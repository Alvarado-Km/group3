 @props(['title', 'description','price'])


 <a href="#" class=" ml-10 mt-20 flex flex-col items-center bg-white  rounded-lg  md:flex-row md:max-w-xl  ">
    <img class="h-auto max-w-xs rounded" src="https://i.pinimg.com/originals/76/bc/18/76bc18531ec18c6ab04e6b24f8f108ec.jpg" alt="">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-">{{$title}}</h5>
        <p class="mb-3 font-normal ">{{$description}}</p>
        <h3 class="font-common text-base mt-10">{{$price}}</h3>
    </div>
</a>
