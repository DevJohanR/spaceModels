import React from 'react'
import { CiInstagram, CiFacebook } from "react-icons/ci";
import Button from '../Button/Button';
import styles from './DesktopNavbar.module.css'

const DesktopNavbar = () => {
  return (
    <div className={styles.componentDesktopNavbar}>
        <div className={styles.social} > 
        <span><CiInstagram size={20} /></span>
        <span><CiFacebook size={20} /></span>
        
        </div>
       
       <div className={styles.btn}> <Button/></div>
       
    </div>
  )
}

export default DesktopNavbar