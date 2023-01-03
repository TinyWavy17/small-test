<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'destination' => 'required',
            'date_trip' => 'required',
            'category' => 'required',
            // 'description' => 'required',
            'expense' => 'required',
            'total' => 'required',
            'deadline' => 'required',
            // 'comment' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên chuyến đi',
            'destination.required' => 'Vui lòng nhập điểm đến',
            'date_trip.required' => 'Vui lòng nhâp ngày đi',
            'category.required' => 'Vui lòng chọn thể loại',
            // 'description.required' => 'Vui lòng nhâp mô tả',
            'expense.required' => 'Vui lòng nhâp chi phí',
            'total.required' => 'Vui lòng nhâp tổng số',
            'deadline.required' => 'Vui lòng nhập hạn nộp tiền',
            // 'comment.required' => 'Vui lòng nhâp ghi chú',
        ];
    }
}