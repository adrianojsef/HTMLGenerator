<?php

/**
 * HTML Generator
 * 
 * Simple PHP library to help in the creation of HTML elements
 * through the use of functions.
 * 
 * To use this library it is necessary to include it into your
 * project like this:
 *
 * <code>
 *  require_once('HTMLGenerator.php');
 * </code>
 *
 * @category    Library
 * @author      Adriano Fernandes <adrianojsef>
 * @license     MIT License
 * @version     1.4.2
 * @link        https://github.com/adrianojsef/HTMLGenerator
 * @since       File available since Release 1.0
 */

// --------------------------------------------------------------------

/**
 * Generates an HTML html
 *
 * This function generates a string with the processed html tag.
 * Here is an example on how to use this function:
 *
 * <code>
 *  $attributes = array(
 *      'style' => 'display: block;'
 *  );
 *
 *  echo html_header('Example', $attributes);
 * </code>
 *
 * @param   string  $content    the content of the HTML element
 * @param   array   $attributes an array with the attributes of the
 *                              element (e.g class, style, ...)
 *
 * @return  string  the output string of the HTML element
 */
if ( ! function_exists('html_html')) {
    function html_html($content = '', $attributes = array())
    {
        return html_element('html', $content, $attributes);
    }
}

// --------------------------------------------------------------------

/**
 * Generates an HTML header
 *
 * This function generates a string with the processed header tag.
 * Here is an example on how to use this function:
 *
 * <code>
 *  $attributes = array(
 *      'style' => 'display: block;'
 *  );
 *
 *  echo html_header('Example', $attributes);
 * </code>
 *
 * @param   string  $content    the content of the HTML element
 * @param   array   $attributes an array with the attributes of the
 *                              element (e.g class, style, ...)
 *
 * @return  string  the output string of the HTML element
 */
if ( ! function_exists('html_header')) {
    function html_header($content = '', $attributes = array())
    {
        return html_element('header', $content, $attributes);
    }
}

// --------------------------------------------------------------------

/**
 * Generates an HTML body
 *
 * This function generates a string with the processed body tag.
 * Here is an example on how to use this function:
 *
 * <code>
 *  $attributes = array(
 *      'style' => 'height: 100%;'
 *  );
 *
 *  echo html_body('Example', $attributes);
 * </code>
 *
 * @param   string  $content    the content of the HTML element
 * @param   array   $attributes an array with the attributes of the
 *                              element (e.g class, style, ...)
 *
 * @return  string  the output string of the HTML element
 */
if ( ! function_exists('html_body')) {
    function html_body($content = '', $attributes = array())
    {
        return html_element('body', $content, $attributes);
    }
}

// --------------------------------------------------------------------

/**
 * Generates an HTML footer
 *
 * This function generates a string with the processed footer tag.
 * Here is an example on how to use this function:
 *
 * <code>
 *  $attributes = array(
 *      'style' => 'display: block;'
 *  );
 *
 *  echo html_footer('Footer', $attributes);
 * </code>
 *
 * @param   string  $content    the content of the HTML element
 * @param   array   $attributes an array with the attributes of the
 *                              element (e.g class, style, ...)
 *
 * @return  string  the output string of the HTML element
 */
if ( ! function_exists('html_footer')) {
    function html_footer($content = '', $attributes = array())
    {
        return html_element('footer', $content, $attributes);
    }
}

// --------------------------------------------------------------------

/**
 * Generates an HTML hyperlink tag
 *
 * This function generates a string with the processed hyperlink tag.
 * Here is an example on how to use this function:
 *
 * <code>
 *  $attributes = array(
 *      'class' => 'hyperlink',
 *      'style' => 'color: blue;'
 *  );
 *
 *  echo html_a('http://example.com', 'Example', $attributes);
 * </code>
 *
 * @param   string  $href       the URL that indicates the destination
 * @param   string  $content    the content of the HTML element
 * @param   array   $attributes an array with the attributes of the
 *                              element (e.g class, style, ...)
 *
 * @return  string  the output string of the HTML element
 */
if ( ! function_exists('html_a')) {
    function html_a($href = '', $content = '', $attributes = array())
    {
        $attributes['href'] = $href;

        return html_element('a', $content, $attributes);
    }
}

// --------------------------------------------------------------------

/**
 * Generates an HTML button
 *
 * This function generates a string with the processed button tag.
 * Here is an example on how to use this function:
 *
 * <code>
 *  $attributes = array(
 *      'class' => 'button'
 *  );
 *
 *  echo html_button('Submit', $attributes);
 * </code>
 *
 * @param   string  $content    the content of the HTML element
 * @param   array   $attributes an array with the attributes of the
 *                              element (e.g class, style, ...)
 *
 * @return  string  the output string of the HTML element
 */
if ( ! function_exists('html_button')) {
    function html_button($content = '', $attributes = array())
    {
        return html_element('button', $content, $attributes);
    }
}

// --------------------------------------------------------------------

/**
 * Generates an HTML paragraph
 *
 * This function generates a string with the processed paragraph tag.
 * Here is an example on how to use this function:
 *
 * <code>
 *  $attributes = array(
 *      'class' => 'text',
 *      'style' => 'color: black;'
 *  );
 *
 *  echo html_p('Example', $attributes);
 * </code>
 *
 * @param   string  $content    the content of the HTML element
 * @param   array   $attributes an array with the attributes of the
 *                              element (e.g class, style, ...)
 *
 * @return  string  the output string of the HTML element
 */
if ( ! function_exists('html_p')) {
    function html_p($content = '', $attributes = array())
    {
        return html_element('p', $content, $attributes);
    }
}


// --------------------------------------------------------------------

/**
 * Generates an HTML heading
 *
 * This function generates a string with the processed heading tag.
 * Here is an example on how to use this function:
 *
 * <code>
 *  $attributes = array(
 *      'class' => 'text',
 *      'style' => 'color: black;'
 *  );
 *
 *  echo html_heading('Example', $attributes);
 * </code>
 *
 * @param   integer $level      the level of the heading (1 to 6)
 * @param   string  $content    the content of the HTML element
 * @param   array   $attributes an array with the attributes of the
 *                              element (e.g class, style, ...)
 *
 * @return  string  the output string of the HTML element
 */
if ( ! function_exists('html_heading')) {
    function html_heading($level = 1, $content = '', $attributes = array())
    {
        // transform given level to an integer
        $level = intval($level);
        // verify if the level is between 1 and 6, if not use the default
        $heading = 'h'.($level >= 1 && $level <= 6 ? $level : 1);

        return html_element($level, $content, $attributes);
    }
}

// --------------------------------------------------------------------

/**
 * Generates an HTML division
 *
 * This function generates a string with the processed division tag.
 * Here is an example on how to use this function:
 *
 * <code>
 *  $attributes = array(
 *      'class' => 'text',
 *      'style' => 'color: black;'
 *  );
 *
 *  echo html_div('Example', $attributes);
 * </code>
 *
 * @param   string  $content    the content of the HTML element
 * @param   array   $attributes an array with the attributes of the
 *                              element (e.g class, style, ...)
 *
 * @return  string  the output string of the HTML element
 */
if ( ! function_exists('html_div')) {
    function html_div($content = '', $attributes = array())
    {
        return html_element('div', $content, $attributes);
    }
}

// --------------------------------------------------------------------

/**
 * Generates an HTML list
 *
 * This function generates a string with of a list tag.
 * Here is an example on how to use this function:
 *
 * <code>
 *  $list = array('red', 'green', 'blue');
 *
 *  $attributes = array(
 *      'class' => 'text',
 *      'style' => 'color: black;'
 *  );
 *
 *  echo html_list(false, $list, $attributes);
 * </code>
 *
 * @param   boolean $ordered    type of list
 *                              This list can be ordered or unordered.
 *                                - ordered [true]
 *                                - unordered [false]
 * @param   array   $list       the list of items
 * @param   array   $attributes an array with the attributes of the
 *                              element (e.g class, style, ...)
 *
 * @return  string  the output string of the HTML element
 */
if ( ! function_exists('html_list')) {
    function html_list($ordered = false, $list = array(), $attributes = array())
    {
        // verify if the list is ordered or not
        $type = ($ordered === true ? 'ol' : 'ul');

        /*
        * generate string of items
        */
        $content = '';

        if (is_array($list)) {
            foreach ($list as $item) {
                $content .= html_element('li', $item);
            }
        }

        return html_element($type, $content, $attributes);
    }
}

// --------------------------------------------------------------------

/**
 * Generates an HTML table
 *
 * This function generates a string with of a table tag.
 * Here is an example on how to use this function:
 *
 * <code>
 *  $content = array(
 *      html_tr(array(html_th('Shape'), html_th('Color'))),
 *      html_tr(array(html_td('Rectangle'), html_td('Blue'))),
 *      html_tr(array(html_td('Triangle'), html_td('Red')))
 *  );
 *
 *  $attributes = array(
 *      'class' => 'table_result',
 *      'width' => '100%'
 *  );
 *
 *  echo html_table($content, $attributes, true);
 * </code>
 *
 * @param   mixed   $content            the content of the HTML element
 * @param   array   $attributes         an array with the attributes of the
 *                                      element (e.g class, style, ...)
 *
 * @return  string  the output string of the HTML element
 */
if ( ! function_exists('html_table')) {
    function html_table($content = array(), $attributes = array())
    {
        if (is_array($content)) {
            $content = implode('', $content);
        }

        return html_element('table', $content, $attributes);
    }
}

// --------------------------------------------------------------------

/**
 * Generates an HTML table head
 *
 * This function generates a string with the processed table head tag.
 * Here is an example on how to use this function:
 *
 * <code>
 *  $attributes = array(
 *      'class' => 'text',
 *      'style' => 'color: black;'
 *  );
 *
 *  $content = html_tr(array(
 *      html_th('ID'),
 *      html_th('Name'),
 *  ));
 *
 *  echo html_thead($content, $attributes);
 * </code>
 *
 * @param   string  $content    the content of the HTML element
 * @param   array   $attributes an array with the attributes of the
 *                              element (e.g class, style, ...)
 *
 * @return  string  the output string of the HTML element
 */
if ( ! function_exists('html_thead')) {
    function html_thead($content = '', $attributes = array())
    {
        return html_element('thead', $content, $attributes);
    }
}

// --------------------------------------------------------------------

/**
 * Generates an HTML table body
 *
 * This function generates a string with the processed table body tag.
 * Here is an example on how to use this function:
 *
 * <code>
 *  $attributes = array(
 *      'class' => 'text',
 *      'style' => 'color: black;'
 *  );
 *
 *  $content = html_tr(array(
 *      html_td('1'),
 *      html_td('Blue'),
 *  ));
 *
 *  echo html_tbody($content, $attributes);
 * </code>
 *
 * @param   string  $content    the content of the HTML element
 * @param   array   $attributes an array with the attributes of the
 *                              element (e.g class, style, ...)
 *
 * @return  string  the output string of the HTML element
 */
if ( ! function_exists('html_tbody')) {
    function html_tbody($content = '', $attributes = array())
    {
        return html_element('tbody', $content, $attributes);
    }
}

// --------------------------------------------------------------------

/**
 * Generates an HTML table row
 *
 * This function generates a string with the processed table row tag.
 * Here is an example on how to use this function:
 *
 * <code>
 *  $content = array(
 *      html_td('Rectangle'),
 *      html_td('Blue')
 *  );
 *
 *  $attributes = array(
 *      'class' => 'text',
 *      'style' => 'color: black;'
 *  );
 *
 *  echo html_tr($content, $attributes);
 * </code>
 *
 * @param   mixed   $content    the content of the HTML element
 * @param   array   $attributes an array with the attributes of the
 *                              element (e.g class, style, ...)
 *
 * @return  string  the output string of the HTML element
 */
if ( ! function_exists('html_tr')) {
    function html_tr($content = array(), $attributes = array())
    {
        if (is_array($content)) {
            $content = implode('', $content);
        }

        return html_element('tr', $content, $attributes);
    }
}

// --------------------------------------------------------------------

/**
 * Generates an HTML table header
 *
 * This function generates a string with the processed table header tag.
 * Here is an example on how to use this function:
 *
 * <code>
 *  $attributes = array(
 *      'class' => 'text',
 *      'style' => 'color: black;'
 *  );
 *
 *  echo html_th('Example', $attributes);
 * </code>
 *
 * @param   string  $content    the content of the HTML element
 * @param   array   $attributes an array with the attributes of the
 *                              element (e.g class, style, ...)
 *
 * @return  string  the output string of the HTML element
 */
if ( ! function_exists('html_th')) {
    function html_th($content = '', $attributes = array())
    {
        return html_element('th', $content, $attributes);
    }
}

// --------------------------------------------------------------------

/**
 * Generates an HTML table cell
 *
 * This function generates a string with the processed table cell tag.
 * Here is an example on how to use this function:
 *
 * <code>
 *  $attributes = array(
 *      'class' => 'text',
 *      'style' => 'color: black;'
 *  );
 *
 *  echo html_td('Example', $attributes);
 * </code>
 *
 * @param   string  $content    the content of the HTML element
 * @param   array   $attributes an array with the attributes of the
 *                              element (e.g class, style, ...)
 *
 * @return  string  the output string of the HTML element
 */
if ( ! function_exists('html_td')) {
    function html_td($content = '', $attributes = array())
    {
        return html_element('td', $content, $attributes);
    }
}

// --------------------------------------------------------------------

/**
 * Generates an HTML form
 *
 * This function generates a string with the processed form tag.
 * Here is an example on how to use this function:
 *
 * <code>
 *  $attributes = array(
 *      'method' => 'get'
 *  );
 *
 *  echo html_form('Example', $attributes);
 * </code>
 *
 * @param   mixed   $content    the content of the HTML element
 * @param   array   $attributes an array with the attributes of the
 *                              element (e.g class, style, ...)
 *
 * @return  string  the output string of the HTML element
 */
if ( ! function_exists('html_form')) {
    function html_form($content = array(), $attributes = array())
    {
        if (is_array($content)) {
            $content = implode('', $content);
        }

        return html_element('form', $content, $attributes);
    }
}

// --------------------------------------------------------------------

/**
 * Generates an HTML input
 *
 * This function generates a string with the processed input tag.
 * Here is an example on how to use this function:
 *
 * <code>
 *  $attributes = array(
 *      'type' => 'text'
 *  );
 *
 *  echo html_input($attributes);
 * </code>
 *
 * @param   array   $attributes an array with the attributes of the
 *                              element (e.g class, style, ...)
 *
 * @return  string  the output string of the HTML element
 */
if ( ! function_exists('html_input')) {
    function html_input($attributes = array())
    {
        return html_element('input', '', $attributes, true);
    }
}

// --------------------------------------------------------------------

/**
 * Generates an HTML textarea
 *
 * This function generates a string with the processed textarea tag.
 * Here is an example on how to use this function:
 *
 * <code>
 *  $attributes = array(
 *      'rows' => 4
 *  );
 *
 *  echo html_textarea('This is just a text', $attributes);
 * </code>
 *
 * @param   string  $content    the content of the HTML element
 * @param   array   $attributes an array with the attributes of the
 *                              element (e.g class, style, ...)
 *
 * @return  string  the output string of the HTML element
 */
if ( ! function_exists('html_textarea')) {
    function html_textarea($content = '', $attributes = array())
    {
        return html_element('textarea', $content, $attributes);
    }
}

// --------------------------------------------------------------------

/**
 * Generates an HTML select
 *
 * This function generates a string with the processed select tag.
 * Here is an example on how to use this function:
 *
 * <code>
 *  $options = array(
 *      html_option(1, 'One'),
 *      html_option(2, Two')
 *  );
 *
 *  $attributes = array(
 *      'type' => 'text'
 *  );
 *
 *  echo html_select($options, $attributes);
 * </code>
 *
 * @param   array   $options    list of options
 * @param   array   $attributes an array with the attributes of the
 *                              element (e.g class, style, ...)
 *
 * @return  string  the output string of the HTML element
 */
if ( ! function_exists('html_select')) {
    function html_select($options = array(), $attributes = array())
    {
        if (is_array($options)) {
            $options = implode('', $options);
        }

        return html_element('select', $options, $attributes);
    }
}

// --------------------------------------------------------------------

/**
 * Generates an HTML option
 *
 * This function generates a string with the processed option tag.
 * Here is an example on how to use this function:
 *
 * <code>
 *  $attributes = array(
 *      'selected' => 'selected'
 *  );
 *
 *  echo html_option(1, 'One', $attributes);
 * </code>
 *
 * @param   mixed   $value      the value of the HTML element
 * @param   array   $content    the content of the HTML element
 * @param   array   $attributes an array with the attributes of the
 *                              element (e.g class, style, ...)
 *
 * @return  string  the output string of the HTML element
 */
if ( ! function_exists('html_option')) {
    function html_option($value = '', $content = array(), $attributes = array())
    {
        $attributes['value'] = $value;

        if (is_array($content)) {
            $content = implode('', $content);
        }

        return html_element('option', $content, $attributes);
    }
}

// --------------------------------------------------------------------

/**
 * Generates an HTML attributes
 *
 * This function generates a string with the processed attributes.
 *
 * @param   array   $attributes an array with the attributes of the
 *                              element (e.g class, style, ...)
 *
 * @return  string  the output string of the concatenated attributes
 */
if ( ! function_exists('html_attributes')) {
    function html_attributes($attributes = array())
    {
        /*
        * generate string of attributes
        */
        $concatenated_attributes = '';

        if (is_array($attributes)) {
            foreach ($attributes as $key => $value) {
                $concatenated_attributes .= $key.'="'.$value.'" ';
            }
        }

        return $concatenated_attributes;
    }
}

// --------------------------------------------------------------------

/**
 * Generates an HTML element
 *
 * This function generates a string with the basic element.
 * This function can be used to create other elements that are not
 * developed yet.
 *
 * @param   string  $tag        the HTML tag to be used
 * @param   string  $content    the content of the HTML element
 *                              This content is treated as a string to
 *                              be able to use this tag as a wrapper.
 * @param   array   $attributes an array with the attributes of the
 *                              element (e.g class, style, ...)
 * @param   boolean $empty      determines if the tag has content
 *
 * @return  string  the output string of the concatenated attributes
 */
if ( ! function_exists('html_element')) {
    function html_element($tag = '', $content = '', $attributes = array(), $empty = false)
    {
        $concatenated_attributes = html_attributes($attributes);

        if ($empty === true) {
            return "<{$tag} {$concatenated_attributes} />";
        } else {
            return "<{$tag} {$concatenated_attributes}>{$content}</{$tag}>";
        }
    }
}