<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Admin
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property int $is_superadmin
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\AdminFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin query()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereIsSuperadmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereUpdatedAt($value)
 */
	class Admin extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\AdminDepartment
 *
 * @property int $id
 * @property int $admin_id
 * @property int $department_id
 * @method static \Illuminate\Database\Eloquent\Builder|AdminDepartment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AdminDepartment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AdminDepartment query()
 * @method static \Illuminate\Database\Eloquent\Builder|AdminDepartment whereAdminId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdminDepartment whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdminDepartment whereId($value)
 */
	class AdminDepartment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Candidate
 *
 * @property int $id
 * @property string $photo_url
 * @property int $student_id
 * @property int $position_id
 * @property int $election_id
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate query()
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereElectionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate wherePhotoUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate wherePositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereStudentId($value)
 */
	class Candidate extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Department
 *
 * @property int $id
 * @property string $name
 * @method static \Database\Factories\DepartmentFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Department newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Department newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Department query()
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereName($value)
 * @mixin \Eloquent
 */
	class Department extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\DepartmentElection
 *
 * @property int $id
 * @property int $department_id
 * @property int $election_id
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentElection newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentElection newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentElection query()
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentElection whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentElection whereElectionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentElection whereId($value)
 */
	class DepartmentElection extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Election
 *
 * @property int $id
 * @property int $election_type_id
 * @property string $title
 * @property string $description
 * @property string $start_at
 * @property string $end_at
 * @property string $school_year
 * @property int $is_open
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Election newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Election newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Election query()
 * @method static \Illuminate\Database\Eloquent\Builder|Election whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Election whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Election whereElectionTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Election whereEndAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Election whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Election whereIsOpen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Election whereSchoolYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Election whereStartAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Election whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Election whereUpdatedAt($value)
 */
	class Election extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ElectionStudent
 *
 * @property int $id
 * @property int $election_id
 * @property int $student_id
 * @method static \Illuminate\Database\Eloquent\Builder|ElectionStudent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ElectionStudent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ElectionStudent query()
 * @method static \Illuminate\Database\Eloquent\Builder|ElectionStudent whereElectionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ElectionStudent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ElectionStudent whereStudentId($value)
 */
	class ElectionStudent extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ElectionStudentVote
 *
 * @property int $id
 * @property int $election_student_id
 * @property int $candidate_id
 * @method static \Illuminate\Database\Eloquent\Builder|ElectionStudentVote newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ElectionStudentVote newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ElectionStudentVote query()
 * @method static \Illuminate\Database\Eloquent\Builder|ElectionStudentVote whereCandidateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ElectionStudentVote whereElectionStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ElectionStudentVote whereId($value)
 */
	class ElectionStudentVote extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ElectionType
 *
 * @property int $id
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|ElectionType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ElectionType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ElectionType query()
 * @method static \Illuminate\Database\Eloquent\Builder|ElectionType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ElectionType whereName($value)
 */
	class ElectionType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Position
 *
 * @property int $id
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|Position newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Position newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Position query()
 * @method static \Illuminate\Database\Eloquent\Builder|Position whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Position whereName($value)
 */
	class Position extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Program
 *
 * @property int $id
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|Program newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Program newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Program query()
 * @method static \Illuminate\Database\Eloquent\Builder|Program whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Program whereName($value)
 */
	class Program extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Role
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role query()
 */
	class Role extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property string|null $remember_token
 * @property int|null $current_team_id
 * @property string|null $profile_photo_path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $profile_photo_url
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCurrentTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProfilePhotoPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorRecoveryCodes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\YearLevel
 *
 * @property int $id
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|YearLevel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|YearLevel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|YearLevel query()
 * @method static \Illuminate\Database\Eloquent\Builder|YearLevel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|YearLevel whereName($value)
 */
	class YearLevel extends \Eloquent {}
}

