<?php
/**
 * An helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace Knowledgedrop{
/**
 * Knowledgedrop\Drop
 *
 * @property integer $id 
 * @property string $slug 
 * @property string $name 
 * @property string $email 
 * @property string $text 
 * @property boolean $activated 
 * @property integer $category_id 
 * @property string $activated_at 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property-read \Knowledgedrop\Category $category 
 * @method static \Illuminate\Database\Query\Builder|\Knowledgedrop\Drop whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Knowledgedrop\Drop whereSlug($value)
 * @method static \Illuminate\Database\Query\Builder|\Knowledgedrop\Drop whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Knowledgedrop\Drop whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\Knowledgedrop\Drop whereText($value)
 * @method static \Illuminate\Database\Query\Builder|\Knowledgedrop\Drop whereActivated($value)
 * @method static \Illuminate\Database\Query\Builder|\Knowledgedrop\Drop whereCategoryId($value)
 * @method static \Illuminate\Database\Query\Builder|\Knowledgedrop\Drop whereActivatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Knowledgedrop\Drop whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Knowledgedrop\Drop whereUpdatedAt($value)
 */
	class Drop {}
}

namespace Knowledgedrop{
/**
 * Knowledgedrop\Category
 *
 * @property integer $id 
 * @property string $slug 
 * @property string $name 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property-read \Illuminate\Database\Eloquent\Collection|\Knowledgedrop\Drop[] $drops 
 * @method static \Illuminate\Database\Query\Builder|\Knowledgedrop\Category whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Knowledgedrop\Category whereSlug($value)
 * @method static \Illuminate\Database\Query\Builder|\Knowledgedrop\Category whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Knowledgedrop\Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Knowledgedrop\Category whereUpdatedAt($value)
 */
	class Category {}
}

namespace Knowledgedrop{
/**
 * Knowledgedrop\User
 *
 * @property integer $id 
 * @property string $name 
 * @property string $email 
 * @property string $password 
 * @property string $remember_token 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @method static \Illuminate\Database\Query\Builder|\Knowledgedrop\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Knowledgedrop\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Knowledgedrop\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\Knowledgedrop\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\Knowledgedrop\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\Knowledgedrop\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Knowledgedrop\User whereUpdatedAt($value)
 */
	class User {}
}

