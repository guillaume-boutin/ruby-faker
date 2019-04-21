<?php

namespace RubyFaker;

use Faker\Provider\Base;

class Job extends Base
{
    protected static $field = ["Marketing", "IT", "Accounting", "Administration", "Advertising", "Banking", "Community-Services", "Construction", "Consulting", "Design", "Education", "Farming", "Government", "Healthcare", "Hospitality", "Legal", "Manufacturing", "Marketing", "Mining", "Real-Estate", "Retail", "Sales", "Technology"];

    protected static $seniority = ["Lead", "Senior", "Product", "National", "Regional", "District", "Central", "Global", "Customer", "Investor", "Dynamic", "International", "Legacy", "Forward", "Internal", "Chief", "Direct", "Corporate", "Future", "Human", "Principal"];

    protected static $position = ["Supervisor", "Associate", "Executive", "Liaison", "Officer", "Manager", "Engineer", "Specialist", "Director", "Coordinator", "Administrator", "Architect", "Analyst", "Designer", "Planner", "Orchestrator", "Technician", "Developer", "Producer", "Consultant", "Assistant", "Facilitator", "Agent", "Representative", "Strategist"];

    protected static $keySkill = ["Teamwork", "Communication", "Problem solving", "Leadership", "Organisation", "Work under pressure", "Confidence", "Self-motivated", "Networking skills", "Proactive", "Fast learner", "Technical savvy"];

    protected static $employmentType = ["Full-time", "Part-time", "Temporary", "Contract", "Internship", "Commission"];

    protected static $educationLevel = ["Associates", "Bachelor", "Master", "Doctorate"];
}