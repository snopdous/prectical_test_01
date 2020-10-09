<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/tailwind.css')}}">
    <title>Project Dashboard</title>
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
      <span class="ml-3 text-xl">Dashboard</span>
    </a>
    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
      <a href="{{url('project')}}" class="mr-5 text-gray-900">Dashboard</a>
      <a href="{{url('project/add')}}" class="mr-5 hover:text-gray-900">New Project</a>
    </nav>
  </div>
</header>
<div class="w-full py-10">
  <div class="w-full py-2 px-10">ALl Projects</div>
  <div class="w-full py-2 px-10">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead>
            <tr>
              <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                Project Type
              </th>
              <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                Project Date
              </th>
              <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
              Cunsultant
              </th>
              <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                Project Note
              </th>
              <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                Installation Address
              </th>
              <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                Installation Date
              </th>
              <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                View Docs
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
          @foreach ($projects as $row)
          <tr>
              <td class="px-6 py-4 whitespace-no-wrap">
                <div class="text-sm leading-5 text-gray-900">{{$row->project_type}}</div>
              </td>
              <td class="px-6 py-4 whitespace-no-wrap">
                <div class="text-sm leading-5 text-gray-900">{{$row->project_date}}</div>
              </td>
              <td class="px-6 py-4 whitespace-no-wrap">
                <div class="text-sm leading-5 text-gray-900">{{$row->cunsultant}}</div>
              </td>
              <td class="px-6 py-4 whitespace-no-wrap">
                <div class="text-sm leading-5 text-gray-900">{{$row->note}}</div>
              </td>
              <td class="px-6 py-4 whitespace-no-wrap">
                <div class="text-sm leading-5 text-gray-900">{{$row->address}}</div>
              </td>
              <td class="px-6 py-4 whitespace-no-wrap">
                <div class="text-sm leading-5 text-gray-900">{{$row->installation_date}}</div>
              </td>
              <td class="px-6 py-4 whitespace-no-wrap">
                <a target="_blank" href="{{asset('storage/'.$row->docs)}}" class="text-sm leading-5 bg-teal-500 py-2 px-4 rounded text-white">View</a>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
  </div>
</div>
</body>
</html>