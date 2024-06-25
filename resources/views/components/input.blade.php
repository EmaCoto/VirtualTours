@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-[#088395] focus:ring-[#088395] rounded-md shadow-sm']) !!}>
