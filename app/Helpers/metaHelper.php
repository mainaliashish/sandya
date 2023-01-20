<?php

    // Helpers For Meta Tags

    function getMetaTitle($m_title, $b_title)
    {
        if($m_title) {
            return $m_title;
        }
        return $b_title;
    }

    function getMetaDescription($m_description, $b_description)
    {
        if($m_description) {
            return $m_description;
        }
        return $b_description;
    }
