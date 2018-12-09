<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use League\Glide\Signatures\SignatureFactory;
use League\Glide\Signatures\SignatureException;

class ImageGetRequest extends FormRequest
{

    private $signatureFactory;

    public function __construct()
    {
        // Set complicated sign key
        $signkey = config('images.key');
        $this->signatureFactory = SignatureFactory::create($signkey);
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(config('images.validate')) {
            try {
                // Validate HTTP signature
                $this->signatureFactory->validateRequest($this->path(), $this->all());
            } catch (SignatureException $e) {
                return false;
            }
        }
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // 'blur' => 'int|min:0|max:100',
            // 'pixel' => 'int|min:0|max:1000',
            // 'filt' => 'string|in:greyscale,sepia',
        ];
    }
}
