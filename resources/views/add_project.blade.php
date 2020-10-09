<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/tailwind.css')}}">
    <title>New Project</title>
    <script>
      @if(Session::get('msg'))
        alert('{{Session::get('msg')}}');
      @endif
    </script>
</head>
<body>
<header class="text-gray-700 body-font bg-gray-200 shadow">
  <div class="container mx-auto flex flex-wrap px-5 py-2 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
      <span class="ml-3 text-xl">New Project</span>
    </a>
    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
      <a href="{{url('project')}}" class="mr-5 hover:text-gray-900">Dashboard</a>
      <a href="{{url('project/add')}}" class="mr-5 text-gray-900">New Project</a>
    </nav>
  </div>
</header>
<div class="w-full flex flex-wrap">
  <div class="md:w-2/3 w-full mx-auto">
  <form action="" method="post" enctype="multipart/form-data">
    @csrf
    <div class="flex flex-wrap pt-6">
      <div class="w-full py-2">
        <h2 class="uppercase text-lg text-green-600 font-semibold">Create Project</h2>
      </div>
      <div class="w-1/3 p-2">
        <label for="project_type">Project Type</label><br>
        <select name="project_type" class="w-full py-2 h-10 px-3 bg-gray-200" id="project_type">
          <option value>Select Project Type</option>
          <option value="solar">Solar</option>
          <option value="solar upgration">Solar Upgration</option>
        </select>
        @error('project_type')
        <div class="text-sm text-red-500">{{ $message }}</div>
        @enderror
      </div>
      <div class="w-1/3 p-2">
        <label for="project_date">Project Created Date</label><br>
        <input name="project_date" type="date" class="w-full py-2 h-10 px-3 bg-gray-200" id="project_date">
        @error('project_date')
        <div class="text-sm text-red-500">{{ $message }}</div>
        @enderror
      </div>
      <div class="w-1/3 p-2">
        <label for="cunsultant">Consultant</label><br>
        <select name="cunsultant" class="w-full py-2 h-10 px-3 bg-gray-200" id="cunsultant">
          <option value>Select Consultant</option>
          <option value="Consultant-1">Consultant-1</option>
          <option value="Consultant-2">Consultant-2</option>
        </select>
        @error('cunsultant')
        <div class="text-sm text-red-500">{{ $message }}</div>
        @enderror
      </div>
      <div class="w-full p-2">
        <label for="note">Note</label><br>
        <textarea name="note" rows="3" class="w-full py-2 px-3 bg-gray-200" id="note" placeholder="project note"></textarea>
        @error('note')
        <div class="text-sm text-red-500">{{ $message }}</div>
        @enderror
      </div>
      <div class="w-full p-2">
        <label for="address">Installation Address</label><br>
        <textarea name="address" rows="1" class="w-full py-2  px-3 bg-gray-200" id="address" placeholder="Installation Address"></textarea>
        @error('address')
        <div class="text-sm text-red-500">{{ $message }}</div>
        @enderror
      </div>
      <div class="w-1/3 p-2">
        <label for="install_date">Installation Date</label><br>
        <input name="installation_date" type="date" class="w-full py-2 h-10 px-3 bg-gray-200" id="install_date">
        @error('installation_date')
        <div class="text-sm text-red-500">{{ $message }}</div>
        @enderror
      </div>
      <div class="w-1/3 p-2">
        <label for="project_doc">Upload Document</label><br>
        <input name="docs" type="file" class="w-full py-1 h-10 px-3 bg-gray-200" id="project_doc" accept="application/msword, application/pdf">
        @error('project_doc')
        <div class="text-sm text-red-500">{{ $message }}</div>
        @enderror
      </div>
      <div class="w-full text-center py-4">
        <button type="submit" class="py-2 px-4 rounded bg-green-600 mx-auto text-white font-semibold">Create Project</button>
      </div>
    </div>
  </form>
  </div>   
</div>
</body>
</html>