<h3>your skill is realted</h3>
































 <!-- $jobs = Job::with('skills:id')->get();
 $result = collect();

User::with('skills:id')->chunk(100, function ($users) use ($jobs, $result) {
    foreach ($users as $user) {
        $userSkillIds = $user->skills->pluck('id')->toArray();

        $matchingJobs = $jobs->filter(function ($job) use ($userSkillIds) {
            $jobSkillIds = $job->skills->pluck('id')->toArray();
            return count(array_intersect($userSkillIds, $jobSkillIds)) > 0;
        });
        $result->push([
            'user' => $user->only(['id', 'name']),  
            'matching_jobs' => $matchingJobs->map->only(['id', 'title'])  
        ]);
    }
});

return $result


CREATE TABLE users (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255) UNIQUE,
    email_verified_at TIMESTAMP NULL,
    password VARCHAR(255),
    remember_token VARCHAR(100) NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE jobs (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    description TEXT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE skills (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE user_skill (
    user_id BIGINT,
    skill_id BIGINT,
    PRIMARY KEY (user_id, skill_id),
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (skill_id) REFERENCES skills(id) ON DELETE CASCADE
);

CREATE TABLE job_skill (
    job_id BIGINT,
    skill_id BIGINT,
    PRIMARY KEY (job_id, skill_id),
    FOREIGN KEY (job_id) REFERENCES jobs(id) ON DELETE CASCADE,
    FOREIGN KEY (skill_id) REFERENCES skills(id) ON DELETE CASCADE
); -->