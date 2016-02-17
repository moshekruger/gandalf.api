<?php
/**
 * Author: Paul Bardack paul.bardack@gmail.com http://paulbardack.com
 * Date: 12.02.16
 * Time: 17:39
 */

namespace App\Models;

/**
 * Class Decision
 * @package App\Models
 * @property string $default_decision
 * @property Rule[] $rules
 * @property Field[] $fields
 * @method static Decision findById($id)
 * @method Decision save(array $options = [])
 */
class Decision extends Base
{
    protected $visible = ['_id', 'fields', 'rules', 'default_decision'];

    protected $fillable = ['fields', 'rules', 'default_decision'];

    protected $perPage = 20;

    public function rules()
    {
        return $this->embedsMany('App\Models\Rule');
    }

    public function fields()
    {
        return $this->embedsMany('App\Models\Field');
    }
}