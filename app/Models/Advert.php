<?php

namespace App\Models;

use App\Models\Traits\Multitenantable;
use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Advert extends Model implements HasMedia {
	use HasFactory, InteractsWithMedia, Multitenantable, SoftDeletes;

	public $table = 'adverts';

	public const STATUS_SELECT = [
		'draft' => 'Draft',
		'active' => 'Active',
		'expired' => 'Expired',
	];

	protected $dates = [
		'deadline',
		'created_at',
		'updated_at',
		'deleted_at',
	];

	protected $fillable = [
		'company_id',
		'title',
		'slug',
		'body',
		'deadline',
		'status',
		'location',
		'sector',
		'education_level',
		'desired_experience',
		'contract_type',
		'number_of_positions',
		'created_at',
		'category_id',
		'updated_at',
		'deleted_at',
		'created_by_id',
	];

	protected function serializeDate(DateTimeInterface $date) {
		return $date->format('Y-m-d H:i:s');
	}

	public function registerMediaConversions(?Media $media = null): void {
		$this->addMediaConversion('thumb')->fit('crop', 50, 50);
		$this->addMediaConversion('preview')->fit('crop', 120, 120);
	}

	public function company(): BelongsTo {
		return $this->belongsTo(Company::class, 'company_id');
	}

	public function getDeadlineAttribute($value) {
		return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
	}

	/*public function setDeadlineAttribute($value) {
		$this->attributes['deadline'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)
			->format('Y-m-d') : null;
	}*/

	public function category(): BelongsTo {
		return $this->belongsTo(Category::class, 'category_id');
	}

	public function created_by(): BelongsTo {
		return $this->belongsTo(User::class, 'created_by_id');
	}
}
