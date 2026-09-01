<?php

declare(strict_types=1);

namespace Liberu\CRM\FormsAndSurveys\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $team_id
 */
final class FormSubmission extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_forms_submissions';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['consent' => 'boolean', 'attribution' => 'array', 'payload' => 'array'];
    }
}
