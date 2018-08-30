<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account\Usage;

use Twilio\Options;
use Twilio\Values;

abstract class RecordOptions {
    /**
     * @param string $category Only include usage of a given category
     * @param \DateTime $startDate Filter by start date
     * @param \DateTime $endDate Filter by end date
     * @return ReadRecordOptions Options builder
     */
    public static function read($category = Values::NONE, $startDate = Values::NONE, $endDate = Values::NONE) {
        return new ReadRecordOptions($category, $startDate, $endDate);
    }
}

class ReadRecordOptions extends Options {
    /**
     * @param string $category Only include usage of a given category
     * @param \DateTime $startDate Filter by start date
     * @param \DateTime $endDate Filter by end date
     */
    public function __construct($category = Values::NONE, $startDate = Values::NONE, $endDate = Values::NONE) {
        $this->options['category'] = $category;
        $this->options['startDate'] = $startDate;
        $this->options['endDate'] = $endDate;
    }

    /**
     * Only include usage of this [usage category](https://www.twilio.com/docs/api/rest/usage-records#usage-categories).
     * 
     * @param string $category Only include usage of a given category
     * @return $this Fluent Builder
     */
    public function setCategory($category) {
        $this->options['category'] = $category;
        return $this;
    }

    /**
     * Only include usage that has occurred on or after this date.  Format is YYYY-MM-DD.  All dates are in GMT.  As a convenience, you can also specify offsets to today.  For example, `StartDate=-30days` will make `StartDate` be 30 days before today.
     * 
     * @param \DateTime $startDate Filter by start date
     * @return $this Fluent Builder
     */
    public function setStartDate($startDate) {
        $this->options['startDate'] = $startDate;
        return $this;
    }

    /**
     * Only include usage that has occurred on or before this date.  Format is YYYY-MM-DD.  All dates are in GMT.  As a convenience, you can also specify offsets to today.  For example, `EndDate=+30days` will make `EndDate` be 30 days from today.
     * 
     * @param \DateTime $endDate Filter by end date
     * @return $this Fluent Builder
     */
    public function setEndDate($endDate) {
        $this->options['endDate'] = $endDate;
        return $this;
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Api.V2010.ReadRecordOptions ' . implode(' ', $options) . ']';
    }
}