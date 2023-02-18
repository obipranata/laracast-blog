<x-layout>
  <x-setting heading="Publish New Post">
    <form method="post" action="/admin/posts" enctype="multipart/form-data">
      @csrf

      <x-form.input name="title" />
      <x-form.input name="slug" />
      <x-form.input name="thumbnail" type="file" />
      <x-form.textarea name="excerpt" />
      <x-form.textarea name="body" />


      <x-form.field>
        <x-form.label name="Category" />

        <select name="category_id" id="category_id">
          @foreach (\App\Models\Category::all() as $category)
            <option value="{{$category->id}}" {{old('category_id') == $category->id ? 'selected' : ''}}>{{ucwords($category->name)}}</option>
          @endforeach
        </select>

        <x-form.error name="category_id" />
      </x-form.field>

      <x-form.submit>
        Publish
      </x-form.submit>
    </form>
  </x-setting>
</x-layout>