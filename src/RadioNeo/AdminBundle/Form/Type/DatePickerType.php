<?php

namespace RadioNeo\AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Date picker type for Bootstrap Datepicker
 *
 * @see https://github.com/eternicode/bootstrap-datepicker
 */
class DatePickerType extends AbstractType
{
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'widget'          => 'single_text',
            'format'          => 'dd/MM/yyyy',
            'autoclose'       => true,
            'today_highlight' => true,
            'language'        => 'fr',
            'start_date'      => null,
        ));
    }

    public function getParent()
    {
        return 'date';
    }

    public function getName()
    {
        return 'datepicker';
    }

    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        $view->vars['date_attr'] = array();

        if (!empty($options['start_date'])) {
            $view->vars['date_attr']['data-date-start-date'] = $options['start_date']->format($this->convertDateFormatToPhpFormat($options['format']));
        }

        if (!empty($options['format'])) {
            $view->vars['date_attr']['data-date-format'] = $this->convertDateFormatToDatepickerFormat($options['format']);
        }

        $datePickerOptions = array(
            'autoclose',
            'today_highlight',
            'language',
        );

        foreach ($datePickerOptions as $datePickerOption) {
            if (array_key_exists($datePickerOption, $options)) {
                $formattedOptionName = 'data-date-' . str_replace('_', '-', $datePickerOption);
                $view->vars['date_attr'][$formattedOptionName] = $options[$datePickerOption];
            }
        }
    }

    /**
     * Converts date format from ICU to PHP
     * @param  string $dateFormat ICU date format
     * @return string             PHP date format
     *
     * @see http://userguide.icu-project.org/formatparse/datetime#TOC-Date-Time-Format-Syntax
     */
    protected function convertDateFormatToPhpFormat($dateFormat)
    {
        return str_replace(array('yyyy', 'MM', 'dd'), array('Y', 'm', 'd'), $dateFormat);
    }

    /**
     * Converts date format from ICU to Bootstrap date picker format
     * @param  string $dateFormat ICU date format
     * @return string             Bootstrap date picker format
     */
    protected function convertDateFormatToDatepickerFormat($dateFormat)
    {
        return str_replace('M', 'm', $dateFormat);
    }
}
