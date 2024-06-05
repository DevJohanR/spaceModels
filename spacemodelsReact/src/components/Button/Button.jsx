import React from 'react'
import styles from './Button.module.css'

const Button = (props) => {
  // Determinar la clase CSS a aplicar basado en la prop 'variant'
  const getButtonClass = () => {
    switch(props.variant) {
      case 'withBorder':
        return styles.withBorder;
      case 'transparent':
        return styles.transparent;
      default:
        return styles.defaultButton;
    }
  };

  return (
    <button className={`${styles.componentButton} ${getButtonClass()}`}>
        {props.name}
    </button>
  )
}

export default Button
