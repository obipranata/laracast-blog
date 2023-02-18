<x-layout>
  <x-setting heading="Manage Posts">

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
      <table class="w-full text-sm text-left text-gray-500">
          <tbody>
            @foreach ($posts as $post)
              <tr class="bg-white border-b">
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    <a href="/post/{{$post->slug}}">
                      {{$post->title}}
                    </a>
                  </th>
                  <td class="px-6 py-4 whitespace-nowrap">
                      <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                        Published
                      </span>
                  </td>
                  <td class="px-6 py-4">
                      <a href="/admin/posts/{{$post->id}}/edit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                  </td>
                  <td class="px-6 py-4">
                      <form method="post" action="/admin/posts/{{$post->id}}">
                        @csrf
                        @method('delete')

                        <button class="text-xs text-gray-400">Delete</button>
                      </form>
                  </td>
              </tr>
            @endforeach
          </tbody>
      </table>
    </div>
  
  </x-setting>
</x-layout>