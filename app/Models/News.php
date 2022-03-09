<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class News
 * 
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $text
 * @property string $image
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class News extends Model
{
	protected $table = 'news';

	protected $fillable = [
		'title',
		'description',
		'text',
		'image'
	];
}
