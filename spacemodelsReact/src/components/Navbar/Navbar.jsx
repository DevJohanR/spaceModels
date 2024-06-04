import React, { useState } from 'react'; //1 traer use state
import { FaBars, FaTimes } from 'react-icons/fa'; // 5 agregar iconos a usar
import styles from './Navbar.module.css'; // Asegúrate de tener los estilos CSS

const Navbar = () => {
  const [isOpen, setIsOpen] = useState(false); // 3 Crear el estado para el menú

  const toggleMenu = () => { // 4 Agregar función para alternar el estado
    setIsOpen(!isOpen);
  };

  return (

    <nav className={styles.navbar}> {/* 2 definir la etiqueta */}
      <div className={styles.menuIcon} onClick={toggleMenu}>
        {isOpen ? <FaTimes /> : <FaBars />}
      </div>
      <ul className={isOpen ? styles.showMenu : ''}>
        <li>Inicio</li>
        <li>Nosotros</li>
        <li>Servicios</li>
        <li>Registrate</li>
        <li>Mision y Vision</li>
        <li>Contacto</li>
      </ul>
    </nav>
    
  );
};

export default Navbar;
