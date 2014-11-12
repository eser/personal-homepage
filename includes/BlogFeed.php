<?php

class BlogFeed
{
    public static function get($url)
    {
        $posts = array();

        if (!($x = simplexml_load_file($url))) {
            return $posts;
        }

        foreach ($x->channel->item as $item)
        {
            $post = array(
                'date' => (string)$item->pubDate,
                'ts' => strtotime($item->pubDate),
                'link' => (string)$item->link,
                'title' => (string)$item->title,
                'text' => (string)$item->description
            );

            // Create summary as a shortened body and remove images, 
            // extraneous line breaks, etc.
            $post['summary'] = self::summarizeText($post['text']);

            $posts[] = $post;
        }

        return $posts;
    }

    private static function summarizeText($summary, $maxLen = 250)
    {
        $summary = html_entity_decode(strip_tags($summary), ENT_QUOTES|ENT_HTML5, 'UTF-8');

        // Truncate summary line to n characters
        if (mb_strlen($summary) > $maxLen) {
            $summary = mb_substr($summary, 0, $maxLen) . '...';
        }

        return $summary;
    }
}
